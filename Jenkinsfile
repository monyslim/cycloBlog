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
                        sh 'echo' "haroldlasswell1" | sudo -S docker build -t cycloblog:1 .
                        docker run -d -p 80:80 cycloblog:1
                        docker stop cycloblog:1
                        docker rm cycloblog:1
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