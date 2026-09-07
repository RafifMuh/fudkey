import { cp, mkdir, readFile, rm, writeFile } from 'node:fs/promises';
import path from 'node:path';
import { fileURLToPath } from 'node:url';

const netlifyDirectory = path.dirname(fileURLToPath(import.meta.url));
const repositoryRoot = path.resolve(netlifyDirectory, '..');
const publicDirectory = path.join(repositoryRoot, 'public');
const viewsDirectory = path.join(repositoryRoot, 'resources', 'views');
const outputDirectory = path.join(netlifyDirectory, 'dist');

const routes = new Map([
    ['', 'bumper'],
    ['bumper', 'bumper'],
    ['home', 'home'],
    ['about', 'about'],
    ['contact', 'contact'],
    ['menu', 'menu'],
    ['csr', 'csr'],
    ['rsvp', 'rsvp'],
]);

const viteDirective = /^\s*@vite\([^\n]+\)\s*$/gm;

await rm(outputDirectory, { recursive: true, force: true });
await mkdir(outputDirectory, { recursive: true });

await cp(publicDirectory, outputDirectory, {
    recursive: true,
    filter: (source) => path.basename(source) !== 'index.php',
});

for (const [route, view] of routes) {
    const bladePath = path.join(viewsDirectory, `${view}.blade.php`);
    const html = (await readFile(bladePath, 'utf8')).replace(viteDirective, '');
    const routeDirectory = route ? path.join(outputDirectory, route) : outputDirectory;

    await mkdir(routeDirectory, { recursive: true });
    await writeFile(path.join(routeDirectory, 'index.html'), html);
}

console.log(`Exported ${routes.size} static routes to ${outputDirectory}`);
