# Introduction to GitHub

> Plase follow the instructions to Create a Repository & Make your first Pull Request to it.


## Create a Repository

1. Go to your `Profile`

![Screenshot 2023-07-17 185413](https://github.com/WasathTheekshana/introduction-to-github/assets/91784445/594d148e-3b14-49e0-a813-b7c313c2f632)
<br/><br/>

2. Go to `Repository` tab

![Screenshot 2023-07-17 185834](https://github.com/WasathTheekshana/introduction-to-github/assets/91784445/6c3a5efb-c7b4-41f6-92c8-512022e994ce)
<br/><br/>

3. Click on `New` button

![Screenshot 2023-07-17 185949](https://github.com/WasathTheekshana/introduction-to-github/assets/91784445/627c0831-99b1-48a7-8c33-fefb0eb60285)
<br/><br/>

4. Fill the fields & click `Create repository` button to create the repo

![Screenshot 2023-07-17 193017](https://github.com/WasathTheekshana/introduction-to-github/assets/91784445/1674baf3-9d40-47b5-a646-b7274069202e)
<br/><br/>


## Install Git on Your Local Machine

To install Git on your local computer, you need to [visit this link](https://git-scm.com/downloads).

> It's easy to install Git on Mac/Linux than Windows 😒

<br/>
1. Go to a Directory that you need to clone your Repository

> Ex: `D:\React`

<br/><br/>
2. Right click & open `Git bash here` if you are a *Windows* user or Open `Terminal` if you are a *Mac/Linux* user in that directory location.

<br/>
3. Type this command on it

```bash
git clone <Your-Repository-Url>
```

![image](https://github.com/WasathTheekshana/introduction-to-github/assets/91784445/351c20a1-48a6-49cb-8ad8-f3468ac88b19)
<br/>

You can find *Repository URL* from the top of the repository

![image](https://github.com/WasathTheekshana/introduction-to-github/assets/91784445/7f9bbae8-1947-4f66-9f60-ca7fb5ce0347)


> If you get any error while cloning the repo, please read this [Stack Overflow Forum](https://stackoverflow.com/questions/68775869/message-support-for-password-authentication-was-removed-please-use-a-personal)


# SetUp Git

- "GIT-IT," an exclusive GitHub session organized by the FOSS Community of NSBM in collaboration with Women in FOSS NSBM.

**Download Git**: 

![Logo](https://git-scm.com/images/logo@2x.png)

- Download [git for Windows](https://github.com/git-for-windows/git/releases/download/v2.40.1.windows.1/Git-2.40.1-64-bit.exe).
- Download [git for Mac](https://git-scm.com/download/mac).
- Download [git for Linux & Unix](https://git-scm.com/download/linux).

## Git Configuration

```bash
git config --global user.name "John Doe"
```
```bash
git config --global user.email johndoe@example.com
```

So, let's get started!
## Git Commands

This command is used to obtain a repository from an existing URL.

```bash
Git clone <repository url>

```
Open repository in local storage

```bash
Cd <repository name>

```
Checkout a branch into your working tree


```bash
Git checkout -b name

```
```bash
git checkout branchname

```
List down branches

```bash
git branch

```
This command lists all the files that have to be committed.


```bash
git status

```
This command adds a file to the staging area.


```bash
git add .

```
This command records or snapshots the file permanently in the version history.


```bash
git commit -m 'commit message'

```

This command sends the committed changes of master branch to your remote repository.
```bash
git push

```
 - if we create a branch locally
  ```bash
git push --set-upstream origin <branch name>

```
This command is used to list the version history for the current branch.


```bash
git log

```
