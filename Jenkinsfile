pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git branch: 'add-logger',
                    credentialsId: 'github-token',  // Gautam_01
                    url: 'https://github.com/GAUTAM7978/php-logger-app.git'
            }
        }

        stage('Install Dependencies') {
            steps {
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
