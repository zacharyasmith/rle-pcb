# PCB Automation

## 2017-18 Senior Design Project

#### How to Use Locally

1. Ensure `git` is installed on your machine

2. Clone the repository (via terminal):

```
git clone [git url]
cd rle-pcb
```

3. Use `php` to serve the application locally

*Ensure you are in the working directory `pcb-rle`*

```
php -S localhost:8000
```

4. Navigate to `localhost:8000` in your browser.

#### How to Edit

**Before making any changes**, make a new branch (`git branch [branch name]`). Then, you can edit and test via your `localhost` server.

Use any source code editor you prefer (preferably meant for `HTML`/`PHP`/`CSS`). Atom IDE, NetBeans IDE, Sublime IDE are all good choices.

Make any changes you want, add them for staging, and commit them.
```
git status
git add .
git commit -m "Message describing the commit."
git push origin [branch name]
```

Then, via GitHub, you can make a *pull request* for your branch and others in the team can verify/review the changes and merge them into the `master` branch.

*This is the industry standard technique for making changes on projects such as this.*
