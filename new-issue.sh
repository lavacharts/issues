#!/bin/bash

ISSUE="$1"

if [ -z $ISSUE ]
then
  echo "You must provide an issue #"
  exit 2
fi

mkdir -v $ISSUE

cp -v index.php "$ISSUE/"

cd $ISSUE
