pipeline {
    agent any
    environment{
        NEW_VERSION = '1.3.0'
    }
    stages {
         stage('Cloning Git') {
            steps {
                git 'https://github.com/Starlord-Code/SGMC.git'
            }
        }
        stage('Install dependencies') {
            steps {
                echo 'dependenices'
                echo "building version ${NEW_VERSION}"
            }
        }
        stage('test') {
            steps {
                echo 'Test Cases'
            }
        }
        stage('deploy') {
            steps {
                echo 'Deploy the case'
            
        }
    }
    post{
        failure{
            emailext attachLog: true, body: '''The log has been attached.<br>Please check.<br>Thanks''', subject: 'Jenkins Build failed', to: 'pushpachandrakala4228@gmail.com vendotisurekha@gmail.com tgkaran219@gmail.com batatwaj.shashank@gmail.com'
        }
        success{
            emailext attachLog: true, body: '''The log has been attached.<br>Please check.<br>Thanks''', subject: 'Jenkins Build passed', to: 'pushpachandrakala4228@gmail.com vendotisurekha@gmail.com tgkaran219@gmail.com batatwaj.shashank@gmail.com'
        }
    }
}

