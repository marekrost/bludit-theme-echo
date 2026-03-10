# Echo theme for Bludit

Bootstrap 5.3.x Bludit theme, based on the original Echo theme for Nibbleblog by Diego Najar.

## Compatibility and Versioning

This theme follows a **mirror versioning** scheme tied to Bludit CMS releases:

- **Major.Minor** mirrors the compatible Bludit stable release (e.g. `3.17.x` targets Bludit 3.17).
- **Patch** increments independently with each theme release.

## Releases

Releases are created automatically via GitHub Actions when a version tag is pushed:

```shell
git tag 3.17.1
git push origin 3.17.1
```

## Local development

Requires Docker. Composer dependencies (Bootstrap) are installed automatically on startup:

```shell
docker compose up
```

Bludit will be available at `http://localhost:8000`. The theme is bind-mounted from `echo/`, so CSS and PHP changes are reflected immediately. Site content is stored in a named volume and persists across restarts.

## Authors

- Diego Najar
- Paulo Nunes
- Marek Rost

## Screenshot

![screenshot](https://raw.githubusercontent.com/marekrost/bludit-theme-echo/main/echo/screenshot.png)
