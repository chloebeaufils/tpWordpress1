echo"---------------------------------------------------------------------"
echo"------------------------------update---------------------------------"
echo"---------------------------------------------------------------------"
sudo apt-get update;
echo"---------------------------------------------------------------------"
echo"------------------------------apache2--------------------------------"
echo"---------------------------------------------------------------------"
sudo apt-get -y install apache2;
echo"---------------------------------------------------------------------"
echo"--------------------------------mysql--------------------------------"
echo"---------------------------------------------------------------------"
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password 0000'
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password 0000'
sudo apt-get -y install mysql-server;
echo"---------------------------------------------------------------------"
echo"----------------------------php--------------------------------------"
echo"---------------------------------------------------------------------"
sudo apt-get -y install php5 php5-mysql;

echo"---------------------------------------------------------------------"
echo"----------------------------git--------------------------------------"
echo"---------------------------------------------------------------------"
sudo apt-get -y install git;

