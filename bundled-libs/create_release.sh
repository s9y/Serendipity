#!/bin/sh
# File: create_release.sh
# Author: Garvin Hicing
# $Id: create_release.sh,v 1.6 2005/03/04 10:16:38 garvinhicking Exp $
#
# Description:
# This file is only used for developers to create a Serendipity release file
# with all the proper file permissions. CVS doesn't track the rightly, so we
# need to fix it before releasing.
#
# Usage:
# As security precaution for any other users just executing this script, there
# are two required input parameters. The first being the basename path of the
# serendipity installation. The second parameter is the target owner of the files.

echo ""
echo "-[serendipity create_release.sh START]---------------------------------"

if [ "x$1" = "x" ] || [ "x$2" = "x" ] || [ "x$3" = "x" ] || [ "x$4" = "x" ];
then
    echo "usage: ./create_release.sh
            [tar.gz dump filename]
            [serendipity installation dirname, without paths]
            [username, i.e. nobody]
            [group, i.e. nogroup]"
    echo ""
    echo "example:"
    echo " $> cd serendipity/bundled-libs/"
    echo " $> ./create_release.sh serendipity-0.7.tar.gz serendipity nobody nogroup"
    echo ""
    echo "WARNING: Running this script in a productive blog environment will do"
    echo "         serious harm!"
    echo "-[serendipity create_release.sh END]----------------------------------"
    echo ""
    exit 1
else
    if test "../../$2"
    then
        echo "WARNING: Running this script in a productive blog environment will do"
        echo "         serious harm! Only use it, if you are a developer and about"
        echo "         to bundle a new release version!"
        echo ""
        echo "Hit [ENTER] to continue, or abort this script (CTRL-C)"
        read -n 1
        gensums=0
        which php > /dev/null
        if [ $? -ne 0 ]
        then
            gensums=-1
            echo "NOTICE: Checksums will not be generated because PHP is not available."
            echo "        Install PHP to generate checksums for file validation, or "
            echo "        run serendipity_generateFTPChecksums.php manually."
            echo ""
            echo "Hit [ENTER] to continue, or abort this script (CTRL-C)"
            read -n 1
        fi

        echo "1. Operating on basedirectory ../../$2"
            cd ../../
            echo "    [DONE]"
            echo ""

        echo "2. Adjusting all subdirectory permissions to 755"
            find "$2" -type d -exec chmod 755 {} \;
            echo "    [DONE]"
            echo ""

        echo "3. Adjusting core directory permissions to 777"
            chmod 777 "$2"
            chmod 777 "$2/templates_c"
            chmod 777 "$2/plugins"
            chmod 777 "$2/uploads"
            echo "    [DONE]"
            echo ""

        echo "4. Adjusting all file permissions to 644"
            find "$2" -type f -exec chmod 644 {} \;
            echo "    [DONE]"
            echo ""

        echo "5. Adjusting special files..."
            echo "   - $2/.htaccess [666]"
            chmod 666 "$2/.htaccess"

            echo "   - $2/upgrade.sh [744]"
            chmod 744 "$2/upgrade.sh"

            echo "   - $2/bundled-libs/create_release.sh [766]"
            chmod 766 "$2/bundled-libs/create_release.sh"
            
            echo "   - $2/tests [remove]"
            rm -rf "$2/tests"
            echo "    [DONE]"
            echo ""

        echo "6. Generating checksums..."
            if [ $gensums -ne 0 ]
            then
                echo "    [SKIP]"
            else
                if (echo "true" | php -B "define('IN_serendipity', true);" -F $2/bundled-libs/serendipity_generateFTPChecksums.php)
                then
                    echo "    [DONE]"
                else
                    rm -rf checksums.inc.php
                    echo "    [FAIL]"
                fi
            fi
            echo ""
        echo "7. Altering CVS to be useful for anonymous users..."
            echo "   - Removing CVS branch tag, so that a user can upgrade to latest CVS"
            find "$2" -type f -name Tag -exec rm {} \;
            echo "       [DONE]"

            echo "   - Inserting ANONYMOUS user instead of Developer account"
            for i in `find $2 -type f -name Root` ; do
                echo ':pserver:anonymous@cvs.sf.net:/cvsroot/php-blog' > $i;
            done
            echo "       [DONE]"
            echo ""

        echo "8. Creating .tgz file $1"
            tar --owner=$3 --group=$4 -czf "$1" "$2"
            echo "    [DONE]"
            echo ""

        echo "9. All Done. Bye-Bye."
    else
        echo "Basedirectory ../../$2 not found. Check parameters"
    fi
    echo "-[serendipity create_release.sh END]----------------------------------"
    echo ""
fi

echo "REMEMBER TO UPDATE docs/RELEASE and commit github branch: git tag -a X.Y ; git push --tags"
