
#!/bin/bash

cd ../..
git submodule init --update --recursive
cd applications/cms/honeybee
git checkout master
make install
cd .. 

