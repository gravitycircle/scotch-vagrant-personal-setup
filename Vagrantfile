# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    config.vm.box = "scotch/box"
    config.vm.network "private_network", ip: "192.168.33.10"
    config.vm.hostname = "scotchbox"
    config.vm.synced_folder "../../Projects", "/var/www/public",
    id: "sites",
    :nfs => { :mount_options => ["dmode=777","fmode=666"] }
    config.vm.synced_folder "./tools", "/var/www/public/tools",
    id: "tools",
    :nfs => { :mount_options => ["dmode=777","fmode=666"] }
    config.vm.synced_folder "./backup", "/home/vagrant/backup/scripts",
    id: "bkptrg",
    :nfs => { :mount_options => ["dmode=777","fmode=666"] }
    config.vm.synced_folder "../../Backup/MySQL", "/home/vagrant/backup/databases",
    id: "bkp",
    :nfs => { :mount_options => ["dmode=777","fmode=666"] }

    config.trigger.before :halt do
        info "Dumping the database before destroying the VM..."
        run_remote  "bash /home/vagrant/backup/scripts/db.sh"
        info "Adding new files to repository"
        run "git add --all"
        info "Committing..."
        run "git commit -m \"DB Snapshot on shutdown.\""
        info "Pushing to repository"
        run "git push"
        info "Done, proceeding to shutdown directive"
    end
    
    # Optional NFS. Make sure to remove other synced_folder line too
    #config.vm.synced_folder ".", "/var/www", :nfs => { :mount_options => ["dmode=777","fmode=666"] }
end


