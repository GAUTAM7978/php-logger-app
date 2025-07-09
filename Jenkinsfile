pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git branch: 'add-logger',
                    url: 'https://github.com/YOUR_USERNAME/php-mini-app.git'
            }
        }

        stage('Install Dependencies') {
            steps {
                sh 'php -v'
                sh 'composer install'
            }
        }

        stage('Run PHP App') {
            steps {
                sh 'php index.php'
            }
        }
    }

    post {
        always {
            echo 'Pipeline execution completed.'
            archiveArtifacts artifacts: 'app.log', fingerprint: true
        }
    }
}
