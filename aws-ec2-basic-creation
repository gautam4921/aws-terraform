#First Script : 
provider "aws" {
    region = "us-east-2"  
}
resource "aws_instance" "awsins01" {
  ami = "ami-0cbf975b93d9cd3f9"
  instance_type = "t2.micro"
  key_name = "ubu-ohio-kp"
  count = 2
  tags = {
    "Name" = "ec2-terraform"
  }
}
