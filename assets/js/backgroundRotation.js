document.addEventListener("DOMContentLoaded", () => {
    const i = Math.floor(Math.random() * 10) + 1;
    document.body.style.cssText = `
        background: url(assets/images/img${i}.jpg) center/cover no-repeat fixed;
    `;
});
