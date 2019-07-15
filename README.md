# minifier

minifier for css and js.


## Devbox with Docker container

### Build the image:

- navigate to root folder `cd minifier`

- `docker build -t minifier:latest -f docker/Dockerfile .`

### Run the container from image

- `docker run -p 8080:80 -d -v $(pwd):/var/www/minifier minifier`