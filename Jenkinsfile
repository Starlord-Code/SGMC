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
        stage('upload war file to artifactory'){
            agent any
            steps{
                echo "upload war to file to artifactory"
            }
            
        }
        stage('deploy') {
            agent any
            steps {
                echo 'Deploy the case'
                sh label: '',script: '''rm -rf dockerimg
                mkdir dockerimg
                cd dockerimg
                cp /var/lib/jenkins/workspace/pipeline-jenkins-2/index.html .
                touch dockerfile
                cat<<EOT>>dockerfile
                FROM tomcat
                ADD index.html /usr/local/tomcat/webapps/
                EXPOSE 8000
                EOT
                sudo docker build -t webimage$BUILD_NUMBER
                sudo docker container run -td --name webserver$BUILD_NUMBER -p 8000 webimage:$BUILD_NUMBER'''
                
            }
        }
        
    }
    post{
        failure{
            emailext attachLog: true, body: '''The log has been attached.<br>Please check.<br>Thanks''', subject: 'Jenkins Build failed', to: 'pushpachandrakala4228@gmail.com vendotisurekha@gmail.com tgkaran219@gmail.com baratwaj.shashank@gmail.com'
        }
        success{
            emailext attachLog: true, body: '''The log has been attached.<br>Please check.<br>Thanks''', subject: 'Jenkins Build passed', to: 'pushpachandrakala4228@gmail.com vendotisurekha@gmail.com tgkaran219@gmail.com baratwaj.shashank@gmail.com'
        }
    }
}