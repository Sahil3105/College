pipeline {
    agent any
    stages {
        stage('Checkout Code') {
            steps {
                git 'https://github.com/your-repo-url'
            }
        }
        stage('Build Docker Image') {
            steps {
                script {
                    docker.build('college-fee-payment-system')
                }
            }
        }
        stage('Push to Docker Hub') {
            steps {
                script {
                    docker.withRegistry('https://index.docker.io/v1/', 'dockerhub-credentials') {
                        docker.image('college-fee-payment-system').push('latest')
                    }
                }
            }
        }
        stage('Deploy to Kubernetes') {
            steps {
                kubernetesDeploy configs: 'k8s/deployment.yaml', kubeconfigId: 'kubeconfig'
            }
        }
    }
}
