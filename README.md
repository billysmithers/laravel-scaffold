# Laravel Scaffold

Within the Promos CMS we use a package for scaffolding Laravel CRUD applications.

There are a few fixes / improvements to make this package suitable for our purposes.

We have PRs raised, while we wait for those PRs to be approved / merged we will manually update the
infoym scaffold vendor package with the files from src within this package.

The script in the root of the Promos CMS repo copies the files from src to the infoym package
on composer post-install-cmd and post-update-cmd.
