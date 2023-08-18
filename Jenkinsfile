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
                        docker build -t cycloblog:1 .
                        docker run -d -p 80:80 cycloblog:1
                        docker stop 22cdd1792707
                        docker rm 22cdd1792707
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