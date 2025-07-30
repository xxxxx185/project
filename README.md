<<<<<<< HEAD
# 信息安全课程中心

本项目是一个面向信息安全教学的课程资源网站，支持用户注册、登录、自动登录、用户类型区分（普通用户/管理员）、课程视频与资料展示、全站资料搜索（支持课程卡片、PDF、视频文件）、界面美观且响应式。

## 功能简介
- 用户注册/登录/登出，自动登录支持
- 用户类型显示（普通用户/管理员）
- 课程视频播放与资料下载
- 全站搜索：支持课程卡片、PDF、视频文件模糊搜索，弹窗展示结果
- 响应式布局，适配PC和移动端
- 前端：HTML5 + CSS3 + JavaScript
- 后端：PHP，MySQL（用户信息）

## 目录结构
```
├─ index.html           # 首页，主入口，课程资料/视频展示与搜索
├─ course.html          # 课程视频页
├─ pdf-list.html        # PDF资料列表页
├─ login.html           # 登录/注册页
├─ register.php         # 注册接口
├─ login.php            # 登录接口
├─ logout.php           # 登出接口
├─ getSessionInfo.php   # 获取当前登录状态
├─ db数.php/db数2.php   # 数据库相关接口
├─ scripts.js           # 额外JS脚本（如有）
├─ styles.css           # 额外CSS样式（如有）
├─ PDF总和/             # 所有PDF资料
├─ 视频/                # 所有课程视频
├─ png/                 # 图片资源
```

## 快速部署
1. 克隆项目到本地：
   ```bash
   git clone https://github.com/xxxxx185/你的仓库名.git
   ```
2. 将项目部署到支持 PHP 的服务器（如 XAMPP、宝塔等），确保 PHP 和 MySQL 环境可用。
3. 导入 `user.sql`、`comments.sql`（如有）到 MySQL 数据库。
4. 修改 PHP 文件中的数据库连接信息（如有需要）。
5. 访问 `index.html` 即可体验全部功能。

## 主要页面说明
- **index.html**：首页，展示课程视频、资料卡片，支持全站搜索
- **course.html**：课程视频列表页
- **pdf-list.html**：所有PDF资料列表页
- **login.html**：用户登录/注册入口

## 特色功能
- 搜索框支持全站资料（课程卡片、PDF、视频）模糊检索，弹窗展示结果
- 登录区域显示用户类型，注册后自动登录
- 响应式设计，移动端友好

## 贡献方式
欢迎提交 issue 或 pull request 改进功能和样式。

## 联系方式
- 邮箱：2350399706@qq.com
- GitHub: [你的GitHub主页](https://github.com/xxxxx185)

---
如需定制或有任何问题，欢迎联系！
=======

这是我的第一个项目。/This is my first project.
我制作了一个信息安全课程的网站，里面放了一些PDF和视频
>>>>>>> 5fb57f1ba91188b52c3dc2df3dcfa114727f93b2

