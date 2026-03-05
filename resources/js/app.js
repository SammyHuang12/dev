// import './bootstrap';
import '../scss/app.scss'; // 全域 CSS

// 共用元件
// import { Header, Footer } from './components/common';

// 根據當前專案路由或條件動態載入
const project = document.body.dataset.project; // 在 Blade body 上設定 data-project
console.log(project);

if (project === 'resume') {
    import('../scss/modules/resume.scss');
    import('./modules/resume.js').then(module => {
        module.default.init();
    });
}
// else if (project === 'projectB') {
//     import('../scss/modules/projectB.scss');
// }
