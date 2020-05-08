

Vagrant.configure("2") do |config|
  config.vm.box = "centos/7"
  config.vm.synced "vagrant/", "/var/www/mysite.local"
 
  config.vm.define "GB_Yii2" do |t|
  end
  
  config.vm.provider "virtualbox" do |v|
    v.name = "GB_Yii2"
  end
 
  config.vm.network "private_network", ip: "192.168.2.10"
   config.vm.provider "virtualbox" do |vb|
    vb.memory = "2048"
   end
 
  config.vm.provision "shell", inline: <<-SHELL
   yum update
   yum install -y net-tools
   yum install -y epel-release
   yum install -y http://rpms.remirepo.net/enterprise/remi-release-7.rpm
   yum install -y yum-utils
   yum-config-manager --enable remi-php70
   yum install php php-mcrypt php-cli php-gd php-curl php-mysql php-ldap php-zip php-fileinfo php-fpm php-mbstring php-dom
   yum install nano nginx
   chkconfig nginx on
   chkconfig php-fpm on
   echo 0 > /sys/fs/selinux/enforce
   SHELL
end
