pipeline {
    agent any

    stages {
        stage('Clone Repository') {
            steps {
                git branch: 'main', url: 'https://github.com/your-username/event-registration.git'
            }
        }

        stage('Build') {
            steps {
                echo 'Building the PHP application...'
                // Commands to build/setup
            }
        }

        stage('Test') {
            steps {
                echo 'Running tests...'
                sh 'php -l register.php' // Syntax checking
            }
        }

        stage('Deploy') {
            steps {
                echo 'Deploying to the server...'
                sshagent(['your-ssh-credentials-id']) {
                    sh '''
                    scp -r * user@your-server:/path/to/deployment/
                    '''
                }
            }
        }
    }

    post {
        success {
            echo 'Pipeline completed successfully.'
        }
        failure {
            echo 'Pipeline failed.'
        }
    }
}

