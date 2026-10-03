# Changelog

All notable changes to this extension are documented here. The format
is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/).

## [1.2.27] - 2026-10-03

### Fixed
- The bundled knowledge base entries are installed again. The install patch looked for its data files in the wrong folder, so no entries were added on a fresh install.
- Knowledge entries in the bundled categories (Category Pages, CMS Pages, Conversion Copy, Homepage Content, Industry Specific, Product Descriptions and the module reference categories) can be selected in the knowledge form and saved. Previously saving one of these entries failed with "Invalid category."
