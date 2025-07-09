pipeline {
    agent {
        docker {
            image 'php:8.2-cli'
            args '-v $PWD:/app -w /app'
        }
    }
    stages {
        stage('Install') {
            steps {
                sh 'curl -sS https://getcomposer.org/installer | php && php composer.phar install'
            }
        }
        stage('Run App') {
            steps {
                sh 'php index.php'
            }
        }
    }
}
