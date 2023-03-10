
const screenshotEl = document.getElementById('screenshot');
const matchDark = window.matchMedia('(prefers-color-scheme: dark)');

const setScreenshot = isDark => (screenshotEl.src = `https://www.azedpress.com/dashboard/assets/img/logo-${isDark ? 'dark' : 'light'}.png`);

setScreenshot(matchDark.matches);

