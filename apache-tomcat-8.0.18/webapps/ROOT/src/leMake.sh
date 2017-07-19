#!/bin/sh

$CATALINA_HOME/bin/shutdown.sh

javac -classpath .:classes:/home/zizacoeur/Bureau/MASTER_1/IBD/TP2/apache-tomcat-8.0.18/lib/servlet-api.jar -d ../WEB-INF/classes/ *.java

$CATALINA_HOME/bin/startup.sh
