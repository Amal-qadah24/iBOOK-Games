# iBOOK Games — complete UI redesign starter

This handoff implements a modern front-end concept while preserving the purple, cyan, and pink iBOOK identity. It contains **60 distinct cover files**, **60 game-detail pages**, the homepage, searchable/filterable game catalog, subjects, grades, schools, about, contact and login screens, plus an equivalent Laravel Blade set.

## Quick preview: no installation required

Open `html-preview/index.html` in a browser. Follow Explore Games to `html-preview/games/index.html`; open any of the 60 covers to see its game page. Assets are stored locally. Alternatively serve `html-preview/` through any static web server.

## Included

- `html-preview/`: 68 static HTML pages with responsive CSS and JS, 60 cover WebP files, original cropped icon references and JSON game catalog.
- `laravel-blade/`: Laravel 10–13-compatible drop-in controller, route group, PHP config, Blade templates, and public CSS/JS/covers.
- `game-integration-mapping.csv`: per-title worksheet for original verified play URLs, grades, age bands, accurate subjects, instructions, and learning goals.
- `DESIGN-SYSTEM.md`: palette, layout rules, responsive design, and content notes.

## Laravel installation

1. In an **existing Laravel application**, copy the contents under `laravel-blade/app`, `laravel-blade/config`, `laravel-blade/resources`, and `laravel-blade/public` to their corresponding application folders. **Merge** with existing folders; do not overwrite unrelated files.
2. Copy `laravel-blade/routes/ibook_games.php` into the application's `routes/` directory.
3. Add one line to the existing `routes/web.php`: `require __DIR__ . '/ibook_games.php';`
4. Run `php artisan config:clear && php artisan route:clear && php artisan view:clear`.
5. Preview at `/ibook-preview`. Routes are isolated intentionally to prevent collisions with the current live site.
6. When approved, mount these routes at the preferred public paths and connect real Game database records through `IbookGamesController::catalog()` instead of the provisional config file.

## Integrate original HTML5 games

The 60 individual **game engines have not been recreated**. Only their new covers, detail pages, and integration-ready player slots are present. In `config/ibook_games.php` or your real database, assign a trustworthy `play_url` to a game's official, owned HTML5 player entry point. The Blade show page automatically renders an iframe when the URL is available; it otherwise deliberately shows a mock player with a clear integration notice. Confirm third-party embedding rules/CSP and sandbox controls before production.

For each game, fill the CSV fields `verified_subject`, `verified_grades`, `verified_age`, `html5_play_url_or_public_asset_path`, `instructions`, and `learning_objectives`. Original game files and database metadata are required for complete playable integration.

## Cover asset quality note

The first 15 cover illustrations are *new concept art* created for this direction. The other 45 use their **specific original game thumbnails** extracted from the user-supplied full-page screenshot, placed into new themed, title-labelled covers. They are game-specific, but screenshot-sourced originals are low-resolution and should be replaced with high-resolution approved assets before production. The exact 60-cover mapping is in `html-preview/assets/games.json` and the CSV. Generated concept art may not match final gameplay scenes exactly.

## Working interactions

- Search 60 games, filter by subject, sort, paginate 12 per page.
- Game links route to 60 individual detail pages.
- Details include related game cards, 3 informational tabs, local favorite toggle, and play connection dialog.
- EN/AR interface toggle, persisted in localStorage (partial translations), mobile menu.
- Grade selection indicates mapping status (does not falsely claim game recommendations).
- Login is visual only; contact form opens email composition (no backend sending).

## Important handoff boundary

This is a **working front-end prototype and Laravel integration starter**, not a deployment to `game.edugames24.com`, and not a working recreation of the game runtimes. No source repository, CMS/database access, original high-res covers, or game HTML5 bundles were provided. A developer should verify and replace the provisional metadata and connect the existing game assets.

Source of title list: the live iBOOK Games homepage, inspected November 11, 2026.
