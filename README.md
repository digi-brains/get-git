![](https://img.shields.io/github/release/digi-brains/get-git.svg?style=flat-square)
![](https://img.shields.io/github/license/digi-brains/get-git.svg?style=flat-square)
![](https://img.shields.io/github/issues/digi-brains/get-git.svg?style=flat-square)

# GetGit

GetGit is a simple PHP class that uses curl to return your Git objects as json.

[Read The Documentation](https://digi-brains.github.io/get-git/)

## Requirements

- A [GitHub account](https://github.com/pricing).
- An OAuth token with the right scopes. Create this from your GitHub account settings.
- PHP with the curl module enabled.

### Installation

Via composer.json

```
{
    "require": {
        "digi-brains/get-git" : "<a specific release or 'dev-master'>"
    }
}
```