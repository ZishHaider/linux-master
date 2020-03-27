#!/bin/groovy
pipeline {
  agent { label 'master' }
  
stages {
	
	stage('Checkout external proj') {
        steps {
            git branch: 'master',
                url: 'https://github.com/bschethan86/linux.git'

            sh "ls -lat"
        }
    }
			   
            stage('Stage 2') {
                   steps {
                sh 'echo Pending'
                                 }
                      }
            
			stage('Stage 3') {
                  steps {
        script {
          def userInput = input(id: 'confirm', message: 'Apply chnages?', parameters: [ [$class: 'BooleanParameterDefinition', defaultValue: false, description: 'Apply changes', name: 'confirm'] ])
				}
						}
							}

           stage('Stage 4') {
                  steps {
                sh 'echo Approved'
                       }
                  }
}
  
  post {
        always {
            echo 'Build Results!'            
            emailext body: "${currentBuild.currentResult}: Job ${env.JOB_NAME} build ${env.BUILD_NUMBER}\n More info at: ${env.BUILD_URL}",
            recipientProviders: [[$class: 'DevelopersRecipientProvider'], [$class: 'RequesterRecipientProvider']],
            subject: "Jenkins Build ${currentBuild.currentResult}: Job ${env.JOB_NAME}" , to: 'bschethan99@gmail.com'

          }

  }
  
}
