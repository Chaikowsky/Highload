

Vagrant.configure("2") do |config|
  config.vm.box = "centos/7"
  config.vm.synced_folder "mysite.local/", "/var/www/mysite.local", create: true

 
  config.vm.define "GB_Yii2-test" do |t|
  end
  
  config.vm.provider "virtualbox" do |v|
    v.name = "GB_Yii2-test"
  end
 
  config.vm.network "private_network", ip: "192.168.2.10"
   config.vm.provider "virtualbox" do |vb|
    vb.memory = "2048"
   end
 
  #config.vm.provision "shell", inline: <<-SHELL
   #yum update
   #yum install -y net-tools
   #yum install -y epel-release
   #yum install -y http://rpms.remirepo.net/enterprise/remi-release-7.rpm
   #yum install -y yum-utils
   #yum install -y nginx
   #yum install -y php70
   #yum install -y php70-php-fpm
   #yum install -y nano
   #yum install php php-mcrypt php-cli php-gd php-curl php-mysql php-ldap php-zip php-fileinfo php-fpm php-mbstring php-dom
   #chkconfig nginx on
   #chkconfig php-fpm on
   #echo 0 > /sys/fs/selinux/enforce
   #SHELL
end
