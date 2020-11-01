# RCC_MRU_2020_web_dev_team

### Steps to commit first time into the repository
- Clone the repository
```
$ git clone https://github.com/raviprakashdev/RCC_MRU_2020_web_dev_team.git
```

- Now do the task that is assigned to you. After that, use these commands to commit
```
$ git add .
$ git commit -m "[your message]"
```
- We will work on our own branch. To create new branch, this command is used
```
$ git checkout -b [branch name]
```

- After that, you have to push to Github using this command
```
$ git push origin [branch name]
```

After that, go to github and open the repository. There click on the branches and then you find the 'New Pull Request' button besides your branch. 
Click on the button and create the request to merge your work into the master branch.

### Steps to further commits into the repository
- First you need to write this command into the existing folder
```
$ git checkout master
$ git pull origin master
```
This command will pull all the changes that have been done in the master

- Now checkout your own branch to do your work. To change the branch, simply write
```
$ git checkout [your branch name]
```

- Now you have to complete your given tasks. After the completion of tasks, write these commands to do a commit locally
```
$ git add .
$ git commit -m "[your message]"
```
make sure that your message also have the current date.

- Once you have done with commits locally then only push to github in your branch. To push your work, simply write these command.
### First make sure you are in your branch and not in master
```
$ git push origin [your branch name]
```

## NOTE: Make your changes locally and do a pull request once in a day.