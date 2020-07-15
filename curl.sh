# set
# curl -c cook.txt 'http://localhost:8080/day03/ex03/cookie_crisp.php?action=set&name=plat&value=choucroute'

# get
# curl -b cook.txt 'http://localhost:8080/day03/ex03/cookie_crisp.php?action=get&name=plat'

# del
# curl -c cook.txt 'http://localhost:8080/day03/ex03/cookie_crisp.php?action=del&name=plat'

# get
# curl -b cook.txt 'http://localhost:8080/day03/ex03/cookie_crisp.php?action=get&name=plat'

# curl 'http://localhost:8080/day03/ex04/raw_text.php'

# curl --head 'http://localhost:8080/day03/ex05/read_img.php'

# curl --user zaz:jaimelespetitsponeys http://localhost:8080/day03/ex06/members_only.php

# curl -v --user root:root http://localhost:8080/day03/ex06/members_only.php

#  curl -v -c cook.txt 'http://localhost:8080/day04/ex00/index.php'

#  curl -v -b cook.txt 'http://localhost:8080/day04/ex00/index.php?login=sb&passwd=beeone&submit=OK'

#  curl -v 'http://localhost:8080/day04/ex00/index.php'

# curl -d login=toto1 -d passwd=titi1 -d submit=OK 'http://localhost:8080/day04/ex01/create.php'

# curl -d login=toto1 -d passwd=titi1 -d submit=OK 'http://localhost:8080/day04/ex01/create.php'

# curl -d login=toto2 -d passwd= -d submit=OK 'http://localhost:8080/day04/ex01/create.php'


#ex02
# curl -d login=x -d passwd=21 -d submit=OK 'http://localhost:8080/day04/ex01/create.php'

curl -d login=x -d oldpw=21 -d newpw=42 -d submit=OK 'http://localhost:8080/day04/ex02/modif.php'