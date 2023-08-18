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
                        docker run -d  --name testblog -p 80:80 cycloblog:1
                        docker stop testblog
                        docker rm testblog
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