MOTHERBASE='/var/www/public/'
TOWRITE=()
LOGS='/home/vagrant/backup/databases/file-change-logs.txt'
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

echo "------ CHANGELOG: $(date +"%B %d, %Y %r %z") ------" > $LOGS
for fname in ${TOWRITE[@]}; do
	echo "${fname}" >> $LOGS
done
echo "------ CHANGELOG PROCESS COMPLETED ------" >> $LOGS
#-printf "%f\n"