# foodblog16

A simple wordpress theme for an imaginary food blog.

## How To Use

### Local Wordpress (Dev) Environment

While the theme can simply be uplodaded to an existing Wordpress installation,
you might not have one running/accessible at the moment. In that case you can
simply set up a local Wordpress environment through docker.

1. Install Docker Engine + Docker Compose:

- instructions for installing Docker Engine can be found here: https://docs.docker.com/engine/install/
- instuctions for Docker Compose can be found here: https://docs.docker.com/compose/install/

2. Set Up Folders:

- pick a location and create a folder (e.g. C:\code\foodblog)
- put the 'compose.yml' inside the folder
- create another folder inside of it called 'wp-content' (e.g. C:\code\foodblog\compose.yml)

3. Run Containers:

- 'compose.yml' defines a basic wordpress environment and syncs the conent of
  'wp-content' into the running container in real-time
- this enables us to develop themes and plugins in 'wp-content' and simultaneously
  testing them live in the running environment
- to start the containers simply run: 'docker compose up -d' (linux)/'docker-compose up -d' (windows)
- the installation can be accessed under: 'localhost:8080'

4. Install Wordpress:

- running the containers for the first time, wordpress will need to be installed
- simply follow the instructions provided and create an admin user as demanded

### Set Up Theme with Test Data + Plugin

Since the theme (and plugin) aren't quite production ready yet and serve mostly
as an example implementation/reference, it is advised to only run them together
and with the provided test-data.

1. Install and activate the extension plugin: see https://github.com/jp-tm13/foodblog16-plus

2. Install and activate 'contact form 7' (this handles the forms of the food blog):
   simply install it through the Wordpress dashboard (alternatively it can be
   found here: https://wordpress.org/plugins/contact-form-7/)

3. Install and activate the theme by cloning the repository into '...\wp-content\themes'
   and selecting it in the Wordpress dashboard

4. Upload the images provided in the 'test-data' folder and import the data from
   'test-data.xml' from the Wordpress dashboard
