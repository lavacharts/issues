#!/bin/bash

ISSUE="$1"

if [ -z $ISSUE ]
then
  echo 'You must provide an issue #'
  exit 2
fi

mkdir $ISSUE

cp composer.json $ISSUE

cp index.php $ISSUE
