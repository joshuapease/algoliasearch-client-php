import type { Host, Requester } from '@algolia/client-common';
import { HttpRequester } from '@algolia/requester-node-http';

import { createSourcesApi } from './src/sourcesApi';
import type { SourcesApi, Region } from './src/sourcesApi';

export * from './src/sourcesApi';
export * from '@algolia/client-common';

export function sourcesApi(
  appId: string,
  apiKey: string,
  region: Region,
  options?: { requester?: Requester; hosts?: Host[] }
): SourcesApi {
  if (!appId) {
    throw new Error('`appId` is missing.');
  }

  if (!apiKey) {
    throw new Error('`apiKey` is missing.');
  }

  if (!region) {
    throw new Error('`region` is missing.');
  }

  return createSourcesApi({
    appId,
    apiKey,
    region,
    timeouts: {
      connect: 1,
      read: 2,
      write: 30,
    },
    requester: options?.requester ?? new HttpRequester(),
    userAgents: [{ segment: 'Node.js', version: process.versions.node }],
    ...options,
  });
}