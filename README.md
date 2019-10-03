![](https://img.shields.io/github/release/sageworksstudio/get-git.svg?style=flat-square)
![](https://img.shields.io/github/license/sageworksstudio/get-git.svg?style=flat-square)
![](https://img.shields.io/github/issues/sageworksstudio/get-git.svg?style=flat-square)

# GetGit

GetGit is a simple PHP class that uses curl to return your Git objects as json.

[Read The Documentation](https://sageworksstudio.github.io/get-git/)

## Requirements

- A [GitHub account](https://github.com/pricing).
- An OAuth token with the right scopes. Create this from your GitHub account settings.
- PHP with the curl module enabled.

### Installation

Via composer.json

```
{
    "require": {
        "sageworksstudio/get-git" : "<a specific release or 'dev-master'>"
    }
}
```