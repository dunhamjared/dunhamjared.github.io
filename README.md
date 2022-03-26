# Personal Website

## Setup
```
npm install
```

## Development
```
npm run serve
```

## Production
```
npm run build
git add dist && git commit -m "Initial dist subtree commit"
git subtree push --prefix dist origin gh-pages
git push origin `git subtree split --prefix dist main`:gh-pages --force
```
