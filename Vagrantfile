# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    config.vm.box = "scotch/box"
    config.vm.network "private_network", ip: "192.168.33.10"
    config.vm.hostname = "scotchbox"
    config.vm.synced_folder "/Users/imacr/Sites", "/var/www/public",
    id: "sites",
    :nfs => { :mount_options => ["dmode=777","fmode=666"] }
    config.vm.synced_folder "./tools", "/var/www/public/tools",
    id: "tools",
    :nfs => { :mount_options => ["dmode=777","fmode=666"] }
    
    # Optional NFS. Make sure to remove other synced_folder line too
    #config.vm.synced_folder ".", "/var/www", :nfs => { :mount_options => ["dmode=777","fmode=666"] }

end
