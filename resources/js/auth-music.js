document.addEventListener('DOMContentLoaded', () => {
    const bgm = document.getElementById('bgm');
    const btn = document.getElementById('musicToggle');

    if (!bgm || !btn) return;

    const icon = btn.querySelector('i');
    bgm.volume = 0.3;

    let started = false;

    document.addEventListener('click', () => {
        if (!started) {
            bgm.play();
            started = true;
            icon.classList.replace('fa-volume-xmark', 'fa-volume-high');
        }
    }, { once: true });

    btn.addEventListener('click', (e) => {
        e.stopPropagation();
        if (bgm.paused) {
            bgm.play();
            icon.classList.replace('fa-volume-xmark', 'fa-volume-high');
        } else {
            bgm.pause();
            icon.classList.replace('fa-volume-high', 'fa-volume-xmark');
        }
    });
});
