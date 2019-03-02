## 使用命令
- 设置全局username：$ git config --global user.name "Your Name"
- 设置全局email：$ git config --global user.email your@example.com
- 切换并新建分支：$ git checkout -b static-pages
- 合并分支：$ git merge fake-branch
- 删除分支：$ git branch -d fake-branch
- 关联远程仓库：$ git remote add origin git@github.com:your_username/pmd_blog.git
- 向远程仓库推送代码：$ git push -u origin master
- 重启vagrant：$ vagrant provision && vagrant reload
- 安装 NPM 扩展包：$ yarn install --no-bin-links
- $ yarn add cross-env
  - 如果报错，参考：https://learnku.com/laravel/t/7743/input-yarn-add-cross-env-after-the-wrong-can-not-continue-how-to-do
- 编译 .scss 文件为 .css 文件：$ npm run dev 
- 监听 .scss 文件，有改动则自动编译为 .css 文件(需cli保持运行状态)：$ npm run watch-poll

## NPM 命令

$ npm install
  - 已安装模块，会跳过；
  
$ npm install -f
  - 强制安装所有模块，包括已安装的模块；
  
$ cnpm install
  - 通过淘宝提供的 cnpm 镜像进行安装；
  
## Yarn
用于替代现有的 NPM 客户端或者其他兼容 NPM 仓库的包管理工具；
- $ yarn install
- $ yarn
- $ yarn add [package]
  - 添加指定的包
  
## 使用 Laravel Mix
- $ yarn install
- $ npm run watch-poll  

## 注意事项

