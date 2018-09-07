# Dad Jokes In My Workflow Logs #

This Pantheon Quicksilver script curls in a dad joke from https://icanhazdadjoke.com and echoes it into your Pantheon workflow logs.  

## Instructions ##

1. Add the dad-jokes-in-my-workflow-logs.php to the `private/scripts` directory of your code repository.
2. Add a Quicksilver operation to your `pantheon.yml` to fire the script on event (see example below).
3. Test a deploy out!

You will want to use the [`terminus workflows:watch <site>`](https://pantheon.io/docs/terminus/commands/) command to see this in action

### Example `pantheon.yml` ###

Here's an example of what your `pantheon.yml` would look like if this were the only Quicksilver operation you wanted to use.  Pick and choose the exact workflows that you would like to see notifications for.

```yaml
api_version: 1

workflows:
  deploy_product:
    after:
        - type: webphp
          description: Put a dad joke in the workflow log after site creation
          script: private/scripts/dad-jokes-in-my-workflow-logs.php
  create_cloud_development_environment:
    after: 
        - type: webphp
          description: Put a dad joke in the workflow log after Multidev creation
          script: private/scripts/dad-jokes-in-my-workflow-logs.php
  deploy:
    after:
        - type: webphp
          description: Put a dad joke in the workflow log after deploy
          script: private/scripts/dad-jokes-in-my-workflow-logs.php
  sync_code:
    after:
        - type: webphp
          description: Put a dad joke in the workflow log after code commit
          script: private/scripts/dad-jokes-in-my-workflow-logs.php
  clear_cache:
    after:
        - type: webphp
          description: Put a dad joke in the workflow log after cache clear
          script: private/scripts/dad-jokes-in-my-workflow-logs.php
```


## example

![image of a screen shot of a terminal and a dad joke: What's the difference between a guitar and a fish? You can tune a guitar but you can't "tuna" fish!](https://i.imgur.com/ufQMevd.png)


### This is an example repo
No guarantee or warranty implied or given.  
No, I will not support this.  