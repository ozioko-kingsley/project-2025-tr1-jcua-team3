## Deployment

This is where we will describe our development and deployment workflow in enough detail that a new team member or someone taking over the project could follow to successfully develop theme updates locally, then test and deploy them to your staging and live sites. This should include aspects such as project management, version control, testing and automation. **Do not provide private details like passwords.**

## Setting up your local environment  #TODO

Once you've set up your own local environment (WAMP, MAMP, XAMP, Docker), download the starter theme from:

> `/project_resources/themes/starter-theme.zip`

Use the theme editor in wordpress to install the starter theme

## Create Staging and Live sites using Hosting  #TODO
## Set up GitHub Actions to Automate deployment
### 1. Create the GitHub Actions Workflow Directory

Before you set up the workflow, you need to organise the project structure to place the workflow file.

Steps:

- Open your terminal or use a code editor with an integrated terminal like Visual Studio Code.
- Navigate to your GitHub repository on your local machine. This means you should be inside the folder that contains the project you’re working on.
- Create the GitHub Actions workflow directory:
- Run the following command in your terminal:

`mkdir -p .github/workflows`

- This creates the .github folder and a subfolder workflows, where your workflow file will reside. This is where GitHub expects workflow files to be stored.

### 2. Create a New Workflow YAML File

Now, you’ll create a file in this new directory to define your deployment process.
Steps:

In the `.github/workflows/` directory, create a new YAML file. You can name this file `deploy.yml` because it’s related to deployment.

- Run the following command in your terminal:

`touch .github/workflows/deploy.yml`

Alternatively, you can create this file directly in your code editor.

### 3. Write the Workflow for WordPress Deployment

This is where the magic happens! You will define the workflow’s steps to automate the deployment of your WordPress site. GitHub Actions uses YAML syntax for defining these workflows.

show our deploy file

### 4. Configure GitHub Secrets for Secure Access

You need to store sensitive data (like the SSH private key) securely in GitHub Secrets so that it’s not exposed in the workflow file.

Steps to add SSH key as a GitHub Secret:

- Go to your GitHub repository.

- Click on Settings (near the top of the page).

- On the left sidebar, click on Secrets and variables > Actions.

- Click on New repository secret.

- Add a secret with the name `SSH_PRIVATE_KEY` and paste the SSH private key in the value field.

- Add another secret named `REMOTE_SERVER` and put the IP or domain of your remote server.

This is important because GitHub Actions will securely access these secrets when running the workflow.

### 5. Push the Changes to GitHub

Now, commit the deploy.yml workflow file and push it to GitHub.

Steps:

1. Run these commands to add, commit, and push the file:

`git add .github/workflows/deploy.yml`

`git commit -m "Add deployment workflow for WordPress"`

`git push origin main`

2. These commands:

- Add the new workflow file to your Git repository.

- Commit the file with a message describing the change.

- Push the changes to GitHub.
### 6. Verify the Deployment
Once you push the changes, GitHub Actions will automatically trigger the workflow if the conditions are met (in this case, a push to the main branch).

Steps:

1. Go to your GitHub repository and click on the Actions tab. You will see a list of workflows that have been triggered.

2. Click on the running workflow to view detailed logs.

3. The logs will show the step-by-step process, including any errors or successes.

4. After the workflow completes successfully, check your WordPress site to verify that it was deployed correctly.
