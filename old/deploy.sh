eval "$(ssh-agent -s)"
ssh-add -k ~/.ssh/id_rsa_personal
cd /var/www/afquintero.tk
git pull
