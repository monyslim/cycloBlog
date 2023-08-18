pipeline{
    agent any
    stages{
        stage("test"){
            steps{
                sh '''
                        echo "welcome to test"
                   '''
            }
        }
        stage("build"){
            steps{
                sh '''
                        ## get the project
                        cd /home/david/cycloBlog
                        docker build -t --name test-cycloblog cycloblog:1 .
                        docker run -d -p 80:80 cycloblog:1
                        docker stop test-cycloblog
                        docker rm test-cycloblog
                        docker compose up -d
                        echo '-------------done------------'
               '''
            }
        }
        stage("production"){

            steps{
                sh '''
                
                   '''     
            }
        }
    }   
}