#! /bin/bash

#Log files modified
echo '> writing changelog...'
MOTHERBASE='/var/www/public/'
TOWRITE=()
LOGS='/home/vagrant/backup/databases/README.md'
for path in $MOTHERBASE*; do
    [ -d "${path}" ] || continue # if not a directory, skip
    BASE="$MOTHERBASE$(basename "${path}")/"
   	

    for sub in $BASE*; do
    	[ -d "${sub}" ] || continue # if not a directory, skip
	    SUBBASE="$(basename "${sub}")"
	    
	    FILELIST=`find $BASE$SUBBASE -newer $LOGS`
	    for file in $FILELIST; do
	    	[ -f "${file}" ] || continue # if not a file, skip
	    	TOWRITE+=("${file}")
	    done
    done
done

echo "# Changelog - $(date +"%B %d, %Y %r UTC %z")" > $LOGS
echo '***' >> $LOGS
for fname in ${TOWRITE[@]}; do
	echo "- ${fname}" >> $LOGS
done
echo '***' >> $LOGS
echo '**Log Description:**' >> $LOGS
echo '' >> $LOGS
echo $1 >> $LOGS
echo '***' >> $LOGS
echo '> done. initializing database snapshots...'
#Save Snapshot
TIMESTAMP=$(date +"%F")
BACKUP_DIR="/home/vagrant/backup/databases/$TIMESTAMP"
MYSQL_USER="root"
MYSQL=/usr/bin/mysql
MYSQL_PASSWORD="root"
MYSQLDUMP=/usr/bin/mysqldump
mkdir -p "$BACKUP_DIR"
 
databases=`$MYSQL --user=$MYSQL_USER -p$MYSQL_PASSWORD -e "SHOW DATABASES;" | grep -Ev "(Database|information_schema|performance_schema|scotchbox|mysql|phpmyadmin)"`

for db in $databases; do
  $MYSQLDUMP --force --opt --user=$MYSQL_USER -p$MYSQL_PASSWORD --databases $db | gzip > "$BACKUP_DIR/$db.gz"
done

echo '> done. end signal sent'