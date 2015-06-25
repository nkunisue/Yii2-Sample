# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  config.vm.box = "puphpet/centos65-x64"  # multi-image parallels/virtualbox

  # config.vm.box_check_update = false

  # config.vm.network "forwarded_port", guest: 80, host: 8080

  config.vm.network "private_network", ip: "172.16.15.10"

  config.vm.synced_folder "./", "/var/www/yii2-sample"

  # config.vm.provider "virtualbox" do |vb|
  #   vb.gui = true
  #   # Use VBoxManage to customize the VM. For example to change memory:
  #   vb.customize ["modifyvm", :id, "--memory", "1024"]
  # end

  config.vm.provider "parallels" do |v|
    v.name = "yii2sample-vagrant"
    v.memory = 1024
    v.cpus = 2
    # v.update_guest_tools = true
  end

  config.vm.provision "ansible" do |ansible|
    ansible.inventory_path = "provision/hosts"
    ansible.playbook = "provision/playbook.yml"
  end

end
