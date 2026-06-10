/**
 * Pdfixed — Three.js hero scene
 * Floating “PDF” planes, parallax, orbit-style interaction, and a one-shot “edit” burst.
 * Skips WebGL when prefers-reduced-motion is enabled (static CSS fallback).
 */
import * as THREE from 'three';
import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls.js';

/**
 * @param {HTMLElement} root
 */
export function initPdfForgeHero(root) {
    const canvas = root.querySelector('canvas');
    if (!canvas) {
        return;
    }

    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (reducedMotion) {
        root.dataset.heroReduced = 'true';
        return;
    }

    const renderer = new THREE.WebGLRenderer({
        canvas,
        antialias: true,
        alpha: true,
        powerPreference: 'high-performance',
    });

    const scene = new THREE.Scene();
    scene.fog = new THREE.FogExp2(0x1a0505, 0.038);

    const camera = new THREE.PerspectiveCamera(48, 1, 0.1, 120);
    camera.position.set(0, 0.35, 6.2);

    const maxPr = /iPhone|iPad|Android/i.test(navigator.userAgent) ? 1.35 : 2;
    const setSize = () => {
        const w = root.clientWidth || 1;
        const h = root.clientHeight || 1;
        renderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, maxPr));
        renderer.setSize(w, h, false);
        camera.aspect = w / h;
        camera.updateProjectionMatrix();
    };
    setSize();

    const ro = new ResizeObserver(setSize);
    ro.observe(root);

    const controls = new OrbitControls(camera, canvas);
    controls.enableDamping = true;
    controls.dampingFactor = 0.06;
    controls.enablePan = false;
    controls.minDistance = 4.2;
    controls.maxDistance = 9.5;
    controls.maxPolarAngle = Math.PI * 0.55;
    controls.minPolarAngle = Math.PI * 0.35;
    controls.rotateSpeed = 0.65;
    controls.target.set(0, 0.1, 0);

    const ambient = new THREE.AmbientLight(0xffc9c9, 0.22);
    scene.add(ambient);

    const key = new THREE.DirectionalLight(0xffffff, 1.05);
    key.position.set(4, 6, 5);
    scene.add(key);

    const rim = new THREE.DirectionalLight(0xff6b6b, 0.65);
    rim.position.set(-5, 2, -4);
    scene.add(rim);

    /**
     * @param {'messy'|'clean'} variant
     */
    function makePdfTexture(variant) {
        const c = document.createElement('canvas');
        c.width = 512;
        c.height = 724;
        const ctx = c.getContext('2d');
        if (!ctx) {
            return new THREE.CanvasTexture(c);
        }

        const g = ctx.createLinearGradient(0, 0, c.width, c.height);
        g.addColorStop(0, variant === 'messy' ? '#3f1d1d' : '#2a0a0a');
        g.addColorStop(1, variant === 'messy' ? '#1f1414' : '#120606');
        ctx.fillStyle = g;
        ctx.fillRect(0, 0, c.width, c.height);

        ctx.strokeStyle = variant === 'messy' ? '#334155' : '#1e293b';
        ctx.lineWidth = 10;
        ctx.strokeRect(24, 24, c.width - 48, c.height - 48);

        ctx.fillStyle = variant === 'messy' ? '#94a3b8' : '#e2e8f0';
        ctx.font = 'bold 34px system-ui, sans-serif';
        ctx.fillText(variant === 'messy' ? 'DRAFT — misaligned' : 'FINAL — aligned', 48, 86);

        ctx.fillStyle = variant === 'messy' ? '#64748b' : '#cbd5e1';
        ctx.font = '22px system-ui, sans-serif';
        for (let i = 0; i < 10; i++) {
            const y = 130 + i * 46;
            const jitter = variant === 'messy' ? (Math.sin(i * 12.7) * 10) : 0;
            ctx.fillText(
                variant === 'messy'
                    ? `Lorem ipsum line ${i + 1}  (skewed blocks / noisy scan)`
                    : `Structured content line ${i + 1} — crisp vectors & consistent spacing`,
                48 + jitter,
                y,
            );
        }

        if (variant === 'messy') {
            ctx.fillStyle = 'rgba(239, 68, 68, 0.35)';
            ctx.fillRect(60, 300, 220, 34);
            ctx.fillStyle = 'rgba(250, 204, 21, 0.25)';
            ctx.fillRect(320, 420, 140, 140);
        } else {
            ctx.strokeStyle = 'rgba(239, 68, 68, 0.65)';
            ctx.lineWidth = 3;
            ctx.strokeRect(60, 292, 392, 46);
            ctx.fillStyle = 'rgba(239, 68, 68, 0.14)';
            ctx.fillRect(320, 410, 150, 150);
        }

        const tex = new THREE.CanvasTexture(c);
        tex.colorSpace = THREE.SRGBColorSpace;
        tex.anisotropy = renderer.capabilities.getMaxAnisotropy();
        return tex;
    }

    /**
     * @param {string} glyph
     */
    function makeIconTexture(glyph) {
        const c = document.createElement('canvas');
        c.width = 256;
        c.height = 256;
        const ctx = c.getContext('2d');
        if (!ctx) {
            return new THREE.CanvasTexture(c);
        }
        ctx.clearRect(0, 0, 256, 256);
        const grd = ctx.createRadialGradient(128, 128, 20, 128, 128, 120);
        grd.addColorStop(0, 'rgba(239,68,68,0.95)');
        grd.addColorStop(1, 'rgba(239,68,68,0.08)');
        ctx.fillStyle = grd;
        ctx.beginPath();
        ctx.arc(128, 128, 118, 0, Math.PI * 2);
        ctx.fill();

        ctx.fillStyle = '#ffffff';
        ctx.font = 'bold 140px system-ui, sans-serif';
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        ctx.fillText(glyph, 128, 132);

        const tex = new THREE.CanvasTexture(c);
        tex.colorSpace = THREE.SRGBColorSpace;
        return tex;
    }

    const messyTex = makePdfTexture('messy');
    const cleanTex = makePdfTexture('clean');

    /**
     * @param {THREE.Texture} tex
     * @param {number} w
     * @param {number} h
     */
    function pdfMesh(tex, w, h) {
        const geo = new THREE.PlaneGeometry(w, h);
        const mat = new THREE.MeshStandardMaterial({
            map: tex,
            metalness: 0.08,
            roughness: 0.62,
            emissive: new THREE.Color(0x2a0808),
            emissiveIntensity: 0.15,
            transparent: true,
            opacity: 1,
        });
        return new THREE.Mesh(geo, mat);
    }

    const group = new THREE.Group();
    scene.add(group);

    const central = pdfMesh(messyTex, 2.15, 3.05);
    central.position.set(0, 0.05, 0.2);
    group.add(central);

    const floaters = [];
    const floaterConfigs = [
        { x: -2.35, y: 0.55, z: -0.35, s: 0.78, rot: 0.35 },
        { x: 2.25, y: -0.15, z: -0.55, s: 0.72, rot: -0.45 },
        { x: -1.85, y: -0.95, z: 0.45, s: 0.66, rot: 0.2 },
        { x: 1.95, y: 0.95, z: 0.15, s: 0.7, rot: -0.25 },
    ];

    floaterConfigs.forEach((cfg, idx) => {
        const m = pdfMesh(idx % 2 === 0 ? messyTex : cleanTex, 1.35 * cfg.s, 1.9 * cfg.s);
        m.position.set(cfg.x, cfg.y, cfg.z);
        m.rotation.z = cfg.rot;
        m.rotation.y = cfg.rot * 0.6;
        group.add(m);
        floaters.push({ mesh: m, baseY: cfg.y, phase: idx * 1.7, speed: 0.55 + idx * 0.08 });
    });

    const iconGroup = new THREE.Group();
    central.add(iconGroup);

    const sprites = ['✎', '✂', '✓'].map((g, i) => {
        const tex = makeIconTexture(g);
        const mat = new THREE.SpriteMaterial({ map: tex, transparent: true, depthWrite: false });
        const spr = new THREE.Sprite(mat);
        spr.scale.setScalar(0.55);
        spr.position.set(1.35, 1.05 - i * 0.55, 0.35);
        iconGroup.add(spr);
        return spr;
    });

    /** @type {THREE.Points|null} */
    let burst = null;
    let burstT = 0;
    let editT = 0;
    let editing = false;
    let swapped = false;

    const pointer = new THREE.Vector2(0, 0);
    const targetTilt = new THREE.Vector2(0, 0);
    const onMove = (ev) => {
        const rect = canvas.getBoundingClientRect();
        const x = ((ev.clientX - rect.left) / rect.width) * 2 - 1;
        const y = -(((ev.clientY - rect.top) / rect.height) * 2 - 1);
        pointer.set(x, y);
        targetTilt.set(x * 0.18, y * 0.12);
    };
    window.addEventListener('pointermove', onMove, { passive: true });

    const triggerEdit = () => {
        if (editing) {
            return;
        }
        editing = true;
        editT = 0;
        burstT = 0;
        if (burst) {
            group.remove(burst);
            burst.geometry.dispose();
            /** @type {THREE.Material} */ (burst.material).dispose();
            burst = null;
        }

        swapped = false;

        const count = /iPhone|iPad|Android/i.test(navigator.userAgent) ? 420 : 900;
        const positions = new Float32Array(count * 3);
        const velocities = new Float32Array(count * 3);
        for (let i = 0; i < count; i++) {
            positions[i * 3 + 0] = central.position.x + (Math.random() - 0.5) * 0.2;
            positions[i * 3 + 1] = central.position.y + (Math.random() - 0.5) * 0.2;
            positions[i * 3 + 2] = central.position.z + (Math.random() - 0.5) * 0.05;
            const speed = 1.6 + Math.random() * 2.4;
            const theta = Math.random() * Math.PI * 2;
            const phi = Math.acos(2 * Math.random() - 1);
            velocities[i * 3 + 0] = Math.sin(phi) * Math.cos(theta) * speed;
            velocities[i * 3 + 1] = Math.sin(phi) * Math.sin(theta) * speed;
            velocities[i * 3 + 2] = Math.cos(phi) * speed;
        }
        const geo = new THREE.BufferGeometry();
        geo.setAttribute('position', new THREE.BufferAttribute(positions, 3));
        geo.userData.vel = velocities;
        geo.userData.init = true;
        const mat = new THREE.PointsMaterial({
            color: 0xef4444,
            size: 0.028,
            transparent: true,
            opacity: 0.9,
            depthWrite: false,
            blending: THREE.AdditiveBlending,
        });
        burst = new THREE.Points(geo, mat);
        group.add(burst);
    };

    canvas.addEventListener(
        'click',
        () => {
            triggerEdit();
        },
        { passive: true },
    );

    const autoTimer = window.setTimeout(() => triggerEdit(), 2400);

    const clock = new THREE.Clock();

    const tick = () => {
        const t = clock.getElapsedTime();
        controls.update();

        const tiltX = THREE.MathUtils.lerp(group.rotation.x, targetTilt.y * 0.08, 0.06);
        const tiltY = THREE.MathUtils.lerp(group.rotation.y, t * 0.0025 + targetTilt.x * 0.12, 0.04);
        group.rotation.x = tiltX;
        group.rotation.y = tiltY;

        central.position.y = 0.05 + Math.sin(t * 0.9) * 0.06;
        central.rotation.y = Math.sin(t * 0.35) * 0.08;
        central.rotation.x = Math.cos(t * 0.28) * 0.05;

        floaters.forEach((f) => {
            f.mesh.position.y = f.baseY + Math.sin(t * f.speed + f.phase) * 0.12;
            f.mesh.rotation.z = Math.sin(t * 0.25 + f.phase) * 0.06;
            f.mesh.rotation.y = Math.cos(t * 0.2 + f.phase) * 0.08;
        });

        iconGroup.rotation.z = t * 0.55;
        sprites.forEach((spr, i) => {
            const a = t * 1.2 + i * (Math.PI * 2) / 3;
            const r = 1.55;
            spr.position.set(Math.cos(a) * r, Math.sin(a * 0.9) * 0.35, Math.sin(a) * 0.35);
        });

        if (editing) {
            editT += 0.016;
            const mat = /** @type {THREE.MeshStandardMaterial} */ (central.material);
            mat.emissiveIntensity = 0.15 + Math.sin(editT * 18) * 0.35 + editT * 0.35;
            central.rotation.z = Math.sin(editT * 10) * 0.12 * (1 - Math.min(editT, 1));

            if (!swapped && editT > 0.35) {
                mat.map = cleanTex;
                mat.needsUpdate = true;
                swapped = true;
            }

            if (burst) {
                burstT += 0.016;
                const pos = /** @type {THREE.BufferAttribute} */ (burst.geometry.getAttribute('position'));
                const vel = /** @type {Float32Array} */ (burst.geometry.userData.vel);
                if (vel) {
                    for (let i = 0; i < pos.count; i++) {
                        pos.array[i * 3 + 0] += vel[i * 3 + 0] * 0.018;
                        pos.array[i * 3 + 1] += vel[i * 3 + 1] * 0.018;
                        pos.array[i * 3 + 2] += vel[i * 3 + 2] * 0.018;
                    }
                    pos.needsUpdate = true;
                }
                /** @type {THREE.PointsMaterial} */ (burst.material).opacity = Math.max(0, 0.95 - burstT * 0.55);
            }

            if (editT > 2.4) {
                editing = false;
                const mat2 = /** @type {THREE.MeshStandardMaterial} */ (central.material);
                mat2.emissiveIntensity = 0.18;
                central.rotation.z = 0;
                if (burst) {
                    group.remove(burst);
                    burst.geometry.dispose();
                    /** @type {THREE.Material} */ (burst.material).dispose();
                    burst = null;
                }
            }
        }

        renderer.render(scene, camera);
        requestAnimationFrame(tick);
    };

    requestAnimationFrame(tick);

    return () => {
        window.clearTimeout(autoTimer);
        window.removeEventListener('pointermove', onMove);
        ro.disconnect();
        controls.dispose();
        renderer.dispose();
        messyTex.dispose();
        cleanTex.dispose();
        sprites.forEach((s) => s.material.map?.dispose());
    };
}
