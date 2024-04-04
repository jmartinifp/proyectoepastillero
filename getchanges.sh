#!/bin/sh

rm -R actualizacion
mkdir actualizacion
git log --name-only -1 > update2.txt
echo "Ejecutando..."
FILES=`cat update2.txt`
export_dir="actualizacion"
for x in $FILES
do
   echo x
   prev_dir=$PWD
   folder=$(dirname $x)
   echo $folder
   mkdir $export_dir/$folder
   echo "Exporting to..." $export_dir/$x
   cp -R $prev_dir/$x $export_dir/$x
done


