#!/bin/bash
base="$( dirname $( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd ))"
resource=${base}/resources
docs=${resource}/docs

if [[ ! -d "$docs" ]]; then
  cd ${resource} && git clone git@github.com:i18nguide/docs.git docs
fi

cd ${docs} && git pull origin master

cd ${base}
# CLEAR CACHE
