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
                        docker build -t monyslim/cycloblog:1 .
                        docker run -d --name cycloblog -p 80:80 monyslim/cycloblog:1
                        docker stop cycloblog
                        docker rm cycloblog
                        echo '-------------done------------'
               '''
            }
        }
        stage("production"){

            steps{
                sh '''
                      docker compose up -d
                      echo '-------------done------------'
                   '''     
            }
        }
    }   
}